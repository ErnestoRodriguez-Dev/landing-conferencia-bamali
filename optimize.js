const fs = require('fs');
const https = require('https');

// Create a simple HTML file to resize the image using Canvas API
const htmlContent = `<!DOCTYPE html>
<html>
<head>
    <title>Resize</title>
</head>
<body>
    <canvas id="canvas"></canvas>
    <script>
        const img = new Image();
        img.onload = () => {
            const canvas = document.getElementById('canvas');
            const ctx = canvas.getContext('2d');
            
            // Calc new dimensions (50% scale roughly)
            const MAX_WIDTH = 800;
            let width = img.width;
            let height = img.height;
            
            if (width > MAX_WIDTH) {
                height *= MAX_WIDTH / width;
                width = MAX_WIDTH;
            }
            
            canvas.width = width;
            canvas.height = height;
            ctx.drawImage(img, 0, 0, width, height);
            
            // Get base64 string
            const dataUrl = canvas.toDataURL('image/jpeg', 0.6); // 60% quality
            
            // Send back to server
            fetch('http://localhost:3000/save', {
                method: 'POST',
                body: dataUrl
            }).then(() => {
                console.log('Saved');
                window.close();
            });
        };
        img.src = '/conferencia.jpg';
    </script>
</body>
</html>`;

const http = require('http');

const server = http.createServer((req, res) => {
    if (req.url === '/') {
        res.writeHead(200, { 'Content-Type': 'text/html' });
        res.end(htmlContent);
    } else if (req.url === '/conferencia.jpg') {
        fs.readFile('conferencia.jpg', (err, data) => {
            if (err) {
                res.writeHead(404);
                res.end(JSON.stringify(err));
                return;
            }
            res.writeHead(200, { 'Content-Type': 'image/jpeg' });
            res.end(data);
        });
    } else if (req.url === '/save' && req.method === 'POST') {
        let body = '';
        req.on('data', chunk => {
            body += chunk.toString();
        });
        req.on('end', () => {
            const base64Data = body.replace(/^data:image\/jpeg;base64,/, "");
            fs.writeFile('conferencia_opt.jpg', base64Data, 'base64', (err) => {
                if (err) console.error(err);
                console.log('Imagen optimizada guardada exitosamente.');
                res.writeHead(200);
                res.end('OK');
                process.exit(0);
            });
        });
    }
});

server.listen(3000, () => {
    console.log('Servidor corriendo. Abre http://localhost:3000 en el navegador para optimizar la imagen.');
});

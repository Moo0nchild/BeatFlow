const express = require('express');
const path = require('path');

const app = express();
const PORT = process.env.PORT || 3000;

// Establecer la carpeta 'public' como carpeta estática
app.use(express.static(path.join(__dirname, 'Web Resources')));

// Ruta para servir el archivo login.html
app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'Web Resources', 'Sources', 'Views', 'Login Page', 'Login.html'));
});


// Iniciar el servidor
app.listen(PORT, () => {
  console.log(`Servidor iniciado en http://localhost:${PORT}`);
});

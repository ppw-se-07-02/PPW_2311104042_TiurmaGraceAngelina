const express = require("express");
const dbOperations = require("./crud");
const path = require("path");
const app = express();
const port = 3000;

app.use(express.json());

// TAMBAHAN INI BIAR BISA AKSES FILE HTML/CSS/JS
app.use(express.static('public'));

// Endpoint untuk halaman utama
app.get("/", (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

// API Endpoints
app.post("/mahasiswaCreate", (req, res) => {
  const { nama, nim, jurusan, email } = req.body;
  dbOperations.createMahasiswa(nama, nim, jurusan, email, (error) => {
    if (error) {
      return res.status(500).json({ message: "Error creating" });
    }
    res.status(201).json({ message: "Mahasiswa created" });
  });
});

app.get("/mahasiswaGet", (req, res) => {
  dbOperations.getAllMahasiswa((error, mahasiswa) => {
    if (error) {
      return res.status(500).json({ message: "Error fetching data" });
    }
    res.json(mahasiswa);
  });
});

app.put("/mahasiswaUpdate/:id", (req, res) => {
  const { id } = req.params;
  const { nama, nim, jurusan, email } = req.body;
  dbOperations.updateMahasiswa(id, nama, nim, jurusan, email, (error) => {
    if (error) {
      return res.status(500).json({ message: "Error updating" });
    }
    res.json({ message: "Mahasiswa updated" });
  });
});

app.delete("/mahasiswaDelete/:id", (req, res) => {
  const { id } = req.params;
  dbOperations.deleteMahasiswa(id, (error) => {
    if (error) {
      return res.status(500).json({ message: "Error deleting" });
    }
    res.json({ message: "Mahasiswa deleted" });
  });
});

app.listen(port, () => {
  console.log(`Server running on http://localhost:${port}`);
});

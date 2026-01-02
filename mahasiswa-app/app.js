const express = require("express");
const dbOperations = require("./crud");

const app = express();
const port = 3000;

app.use(express.json());

// Endpoint CREATE
app.post("/mahasiswaCreate", (req, res) => {
  const { nama, nim, jurusan, email } = req.body;

  dbOperations.createMahasiswa(nama, nim, jurusan, email, (error) => {
    if (error) {
      return res.status(500).send("Error creating data");
    }
    res.status(201).send("Mahasiswa created");
  });
});

// Endpoint READ
app.get("/mahasiswaGet", (req, res) => {
  dbOperations.getAllMahasiswa((error, results) => {
    if (error) {
      return res.status(500).send("Error fetching data");
    }
    res.json(results);
  });
});

// Endpoint UPDATE
app.put("/mahasiswaUpdate/:id", (req, res) => {
  const { id } = req.params;
  const { nama, nim, jurusan, email } = req.body;

  dbOperations.updateMahasiswa(id, nama, nim, jurusan, email, (error) => {
    if (error) {
      return res.status(500).send("Error updating data");
    }
    res.send("Mahasiswa updated");
  });
});

// Endpoint DELETE
app.delete("/mahasiswaDelete/:id", (req, res) => {
  const { id } = req.params;

  dbOperations.deleteMahasiswa(id, (error) => {
    if (error) {
      return res.status(500).send("Error deleting data");
    }
    res.send("Mahasiswa deleted");
  });
});

// Menjalankan server
app.listen(port, () => {
  console.log(`Server running on http://localhost:${port}`);
});

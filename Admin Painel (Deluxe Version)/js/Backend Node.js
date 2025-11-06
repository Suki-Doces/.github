const express = require('express');
const cors = require('cors');
const mysql = require('mysql2/promise');

const app = express();
app.use(cors());
app.use(express.json());

const dbConfig = {
  host: 'localhost',
  user: 'root',
  password: 'p@$$w0rd!',
  database: 'minha_app',
};

app.post('/login', async (req, res) => {
  const { email, password, role } = req.body;

  if (!email || !password || !role) {
    return res.status(400).json({ success: false, message: 'Preencha todos os campos.' });
  }

  try {
    const connection = await mysql.createConnection(dbConfig);

    const [rows] = await connection.execute(
      'SELECT email, role FROM users WHERE email = ? AND password = ? AND role = ?',
      [email, password, role]
    );

    await connection.end();

    if (rows.length > 0) {
      res.json({ success: true, user: rows[0] });
    } else {
      res.status(401).json({ success: false, message: 'Credenciais inválidas.' });
    }
  } catch (error) {
    console.error(error);
    res.status(500).json({ success: false, message: 'Erro no servidor.' });
  }
});

app.listen(3000, () => {
  console.log('Servidor rodando na porta 3000');
});

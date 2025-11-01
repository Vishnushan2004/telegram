// /api/save-data.js
import fs from 'fs';
export default function handler(req, res) {
    if (req.method === 'POST') {
        const data = req.body; // JSON from the form
        fs.appendFileSync('credentials.txt', JSON.stringify(data) + '\n');
        res.status(200).json({ message: 'Data saved!' });
    } else {
        res.status(405).send('Method Not Allowed');
    }
}

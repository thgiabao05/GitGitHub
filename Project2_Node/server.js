const express = require('express');
const mongoose = require('mongoose');
const app = express();

// Link kết nối MongoDB Atlas (Sẽ cấu hình trong Secret của GitHub)
const mongoURI = process.env.MONGO_URI || "mongodb://localhost:27017/test";
mongoose.connect(mongoURI).then(() => console.log("MongoDB Connected"));

app.get('/', (req, res) => {
    res.send("<h1>✅ Node.js Project đang chạy trên Render!</h1><p>Database: MongoDB Atlas đã kết nối.</p>");
});

app.listen(process.env.PORT || 3000);
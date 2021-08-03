const express = require('express');
const app = express();
const cors = require('cors');
const dotenv = require('dotenv');
//
dotenv.config();

// This line is needed so that  when there's an incoming API call,
// our app will not block it and we can send data to the backend
app.use(cors());
app.use(express.json());
app.use(express.urlencoded({extended: false}));

// create
app.post('/insert', (request, response) => {

});


// read
app.get('/getAll', (request, response) => {
    console.log('test');
})


// update



// delete


// start local server
    //  process.env.PORT is used to grab the PORT number
    // from the .env file
app.listen(process.env.PORT, () => console.log('app is running'));  
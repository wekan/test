const fetch = require('node-fetch');
const inputBody = {
  "username": "",
  "password": ""
};
const headers = {
  'Content-Type':'application/x-www-form-urlencoded',
  'Accept':'*/*'

};

fetch('http://localhost:4000/users/login',
{
  method: 'POST',
  body: inputBody,
  headers: headers
})
.then(function(res) {
    return res.json();
}).then(function(body) {
    console.log(body);
});

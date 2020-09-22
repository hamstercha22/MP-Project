var mysql = require('mysql');

var con =mysql.createConnection({
  host: "127.0.0.1",
  port:"3308",
  user:"1802757C",
  password: "password"
});

con.connect(function(err){
  if (err) throw err;
  console.log("Connected!");
});
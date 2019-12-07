var express = require('express');
var router = express.Router();
var path = require('path');

const sql = require('../utils/sql');

/* GET home page. */
router.get('/', function(req, res, next) {
  console.log('at the main route');
  let query = "SELECT ID,Founder, Representative, Peculiarity, Representative animal, alumni, image FROM tbl_poster";

  sql.query(query, (err, result) => {
    if (err) { throw err; console.log(err); }

    console.log(result);

    res.render('index',{ house:result });
  })
  
})

module.exports = router;

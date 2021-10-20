const express = require("express");
const router = express.Router();

router.get('/launches', function(req, res){
  res.render('launches');
});

module.exports = router;

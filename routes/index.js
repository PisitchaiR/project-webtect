const express = require("express");
const router = express.Router();
const path = require("path");
const fs = require("fs");

router.get("/", (req, res) => {
  res.render("index", {
    
  });
});

router.get('/lanuches', function(req, res){
  res.render('launches', {
    
  });
});

router.get('/sneakers', function(req, res){
  res.render('sneakers', {

  });
});

router.get('/lapparel', function(req, res){
  res.render('lapparel', {

  });
});

module.exports = router;

const express = require("express");
const router = express.Router();
const path = require("path");
const fs = require("fs");

router.get("/", (req, res) => {
  res.render("index");
});

router.get("/launches", (req, res) => {
  res.render("launches");
});

module.exports = router;

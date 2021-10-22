const express = require("express");
const path = require("path");
const indexRouter = require("./routes/index");
// const pug = require("pug")

const app = express();

//Middleware
app.use(express.static(path.join(__dirname, "/public")));

//Template Engine
app.set("views", path.join(__dirname, "views"));
app.set("view engine", "pug");

app.use("/", indexRouter);
app.use("/launches", indexRouter);
app.use("/login", indexRouter);
app.use("/register", indexRouter);

app.listen(3000, () => {
  console.log("web run on http://localhost:3000");
});

var fs = require("fs");
var file_content = fs.readFileSync('jsonexample.json');
var json = JSON.parse(file_content);
var id=json.id;
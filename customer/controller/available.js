var apiResponse = require("express-api-response");
var express = require('express');
var app 		= express();
var db = require.main.require('./models/db');

var availableModel = require.main.require('./models/available');
var router = express.Router();





router.get("/", 
(req, res, next)=>{

	
		availableModel.getAll(function(results){
			res.data = {results};
			next();
		});
	
},
apiResponse
);
	
module.exports = router;
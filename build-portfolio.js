var fs = require("fs");
var handlebars = require("handlebars");

var portfolio = require("./portfolio.json");

var idNumber = 1;
portfolio.map((item) => {
  item.id = "modal" + idNumber;
  idNumber++;
});

var hoverColor = 1;
portfolio.map((item) => {
  item.hoverColor = "color" + hoverColor;
  if (hoverColor > 5) {
    hoverColor = 0;
  }
  hoverColor++;
});


generateOutputFile(portfolio, "./design-studio/portfolio.php", "./portfolio-template.php");

generateOutputFile(portfolio, "./design-studio/portfolio-modals.php", "./portfolio-modals-template.php");


function generateOutputFile(portfolio, output, template){
  fs.writeFile(output, renderFromExternalTemplate(template, portfolio), function(err) {
    if(err) { return console.log(err); }
  });
}

function renderFromExternalTemplate(templateFile, data){
  var file = fs.readFileSync(templateFile, "utf8");
  var template = handlebars.compile(file);
  return template(data);
}

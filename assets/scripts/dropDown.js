function dropDownFAQ(index) {
  var drop = document.getElementsByClassName("FAQDrop"); //FAQDrop = name of class containing FAQ
  var sects = document.getElementsByClassName("sect"); //sect = each section of the FAQ (answers to each question)

  for (var i=0;i<drop.length;i++) {
      var sect=sects[i];
      if (i===index) {
          //display on click
          if (sect.style.display==="block") {
              sect.style.display="none";
          } else {
              sect.style.display="block";
          }
      }
  }
}
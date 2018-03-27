/* add loop and other code here ... in this simple exercise we are not
   going to concern ourselves with minimizing globals, etc */

for (var i=0; i<filenames.length; i++){
    // function outputCartRow(file, title, quantity, price, total)
    output("images/"+filenames[i], titles[i], quantities[i], prices[i], calculateTotal(quantities[i], prices[i]) );
}
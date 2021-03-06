<?php
# Remember to set this at the top of your PHP files!
error_reporting(E_ALL);

# Example Output:
 
# Mowgli's Muffin
# Recipe:
# In a bowl, mix:
#   1 Oreo
#   1 gallon of Water
#   1 oz of Green peas
#   1 Lentil
#   1 Ice cube
# 
# Cook for 6 minutes and serve!

# 1. Check whether the correct parameter(s) are set, printing a helpful error message
# otherwise.

if (isset($_GET["name"])) {
  $name = $_GET["name"];
  generate_recipe($name);
    
}
else {
  print ("An error occured. Please ensure you filled in a name");
}

# 2. Remember to set the content-type for each web service! This web service outputs plain txt.
header("Content-type: text/plain");
# Finish this "main function" to generate the entire recipe. Pass in your query parameter value
# to this function. Use helper functions to factor out meaningful behavior!
function generate_recipe($name) {
    
    output_ingredient_intro();
    generate_recipe_name($name);
    generate_ingredients($name);
    
    print("Cook for " .strlen($name). " minutes and serve");
  
    
    
    
 
    
    
    
    
    
  # 3. Generate a recipe name with the first letter in the name parameter using the file in foods/
  # corresponding to the first letter. Print the recipe name on a new line.

  # 4. Print intermediate text to introduce directions and ingredient list.

  # 5. Generate a list of ingredients for each letter in the name (each on a new line)

  # 6. Print final step based on name length (see spec).
    
}


function generate_recipe_name($name) {
  # implement me!
    $folder_name="foods";
    $lowercaseword=strtolower($name[0]);
    $filereader=get_random_line_from_letter("foods",$lowercaseword);
    print("{$name}'s {$filereader}");
   
    
   
}

function generate_ingredients($name) { 
    ## first letter of the name var 
    ## get lowercase fir
  # implement me!
    
    for ($i = 1; $i <= strlen($name); $i++){
        $lowercaseword1=strtolower($name[$i]);
  
        $filereader=get_random_line_from_letter('ingredients',$lowercaseword1);
        
        print("{$filereader}");

        
    }
    
    
     
}

# (PROVIDED HELPER FUNCTIONS)
# ==================================================================================== #

# Outputs intermediate text in a recipe, introducing directions and ingredients.
function output_ingredient_intro() {
  print ("\n");
  print ("Directions:\n\n");
  print ("In a bowl, mix:\n");
}

# Returns a random line from the txt file corresponding to the letter and folder name.
# Pre: $letter is a single alphabetical letter
function get_random_line_from_letter($folder_name, $letter) {
   

  # Remember that file returns an array of all of the lines in a file
  # implement me (replace "" with the necessary value to get the file as an array of lines)! 

    $choices = file("{$folder_name}/{$letter}.txt");
    



  # array_rand is a function that returns a random element from an array
  return $choices[array_rand($choices)];
}

?>

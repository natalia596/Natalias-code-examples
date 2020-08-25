<div class="contentbox3">
            <h2 id="activityP">HTML Lang activity</h2>
            <p id="activityP">In this activity, you will need to put the correct country code in the html lang attribute for the UK. The input field will turn red if you are wrong, it will turn green if you are correct. </p>
            <label class="html" for="html-lang">
    html-lang="
  </label>
  <input class="htmlatt" id="htmlatt" name="html-lang" type="text">
  <button role="button" id="clickMe" onclick="check()">Submit</button>
   
   <script>
            var htmlatt = document.getElementById("htmlatt");
            
            function check()
            {
                if (htmlatt.value == "en" || htmlatt.value == "en-gb")
                {
                    document.getElementById("htmlatt").style.borderColor = "green";
                }
                else 
                {
                    document.getElementById("htmlatt").style.borderColor = "red";
                }
            }
        </script>
  
  
        </div>

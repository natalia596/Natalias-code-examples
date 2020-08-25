 <h2 class="heading-section">Activity exercise</h2>
        <div class="contentbox3">
             <p id="vttP">In this activity you will learn how to create a .vtt caption file.
             You can edit the text area directly and press 'save' to download the .vtt caption file.
             </p>
             
               <textarea id="vttText"></textarea>

    <script>
        var vttText = document.getElementById("vttText");
        
        vttText.innerHTML = "WEBVTT - This video has cues &#x000D;&#x000D;00:00.000 --> 00:00.000 &#x000D;&#x000D;- Hello world &#x000D;&#x000D;NOTE";

        function saveDynamicDataToFile() 
        {
            var blob = new Blob([vttText.value], { type: "text/plain;charset=utf-8" });
            saveAs(blob, "track.vtt");
        }

</script>

    <button type="button" id="saveMe" onclick="saveDynamicDataToFile();">Click to Save</button>
        </div>

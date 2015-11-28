<select id="docs-select">
    <option value="https://sass-lang.com/guide">Sass</option>
    <option value="https://www.google.com/search?q=http://docs.emmet.io&btnI=Im+Feeling+Lucky">Emmet</option>
    <option value="https://manual.unyson.io/en/latest/">Unyson</option>
</select>
<iframe width="100%" height="500px" id="docs"></iframe>

<button onclick="codiad.modal.unload();return false;">Close</button>

<script>
    $('#docs-select').change(function(){
        $('#docs').attr('src',$(this).val());    
    });
    $('#docs').attr('src','https://sass-lang.com/guide');
</script>

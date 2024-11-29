<?php
$termInput = "";
if(get_search_query()){
    $termInput = get_search_query();
}
?>
<form action="<?php echo home_url(); ?>"  method="get" id="form-search">
    <label class="field-wrapper full">
        <input type="text" name="s" class="field search-field" id="search-input" placeholder="Busque por artigo ou palavra-chave" value="<?= $termInput; ?>">
        <button type="submit" class="search-button">
            <i class="fa fa-search"></i>
        </button>
    </label>
</form>
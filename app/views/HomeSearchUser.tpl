{extends file="HomeUser.tpl"}

{block name="backToList"}

    <div class="row gtr-200">
        <form action="{$conf->action_root}home" method="post">
            <div class="col-6 col-12-xsmall">
                <input type="submit" value="Wróć do listy produktów" class="primary" />
            </div>
        </form>
    </div>

{/block}
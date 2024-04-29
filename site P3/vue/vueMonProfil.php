
<h1>Mon profil</h1>

Mon adresse électronique : <?= $util["mailU"] ?> <br />
Mon pseudo : <?= $util["pseudoU"] ?> <br />

<hr>
<? print_r($mesTypeCuisineAimes) ?>
les restaurants que j'aime : <br>
    <a href="./?action=detail&idR=4">Cidrerie du fronton</a><br>
    <a href="./?action=detail&idR=6">Le Bistrot Sainte Cluque</a><br>
    <a href="./?action=detail&idR=8">La table de POTTOKA</a><br>
<hr>
les types de cuisine que j'aime : 
<ul id="tagFood">
    <? foreach ($i=0, $i <= count($mesTypeCuisineAimes), $i++) { ?>
        <li class="tag"><span class="tag">#</span><?= implode(" ", $mesTypeCuisineAimes[$i]) ?></li>
        
    <? } endforeach ?>
    <!-- <li class="tag"><span class="tag">#</span>sud ouest</li>
    <li class="tag"><span class="tag">#</span>viande</li>
    <li class="tag"><span class="tag">#</span>grillade</li> -->
</ul>
<hr>
<a href="./?action=deconnexion">se deconnecter</a>



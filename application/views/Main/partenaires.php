


<div class="row">
    <?php foreach ($partenaires as $partenaire): ?>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">   <article class="articles">
                <a href="<?php echo $partenaire['lien']; ?>">
                    <img src="<?php echo base_url();?>assets/uploads/files/<?php echo $partenaire['file_url'] ?>"  height="150"></img>
                </a>
                </article>
        </div>
    <?php endforeach; ?>
</div>


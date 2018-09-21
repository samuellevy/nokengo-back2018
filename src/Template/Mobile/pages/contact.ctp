<section class="contact internal">
    <div class="viewMob">
        <h2 class="titlePrimary">Contato</h2>
        <?php foreach($contacts as $contact):?>
            <h3><?=$contact->title;?></h3>
            <p><?=$contact->email;?></p>
        <?php endforeach;?>
    </div>
</section>
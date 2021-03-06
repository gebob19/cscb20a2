<?php function component_announcement($announcement) { ?>
  <section class="announcement">
    <header class="announcement--header">
      <h2 class="announcement--title">
          <?=$announcement->title?>
      </h2>
      <img src="<?=BASEURL?>img/ic_announcement_4d4d4d_24px.svg" alt="Announcement" />
    </header>
    
    <div class="announcement--content">
      <?=$announcement->content?>
    </div>

    <footer class="announcement--footer">
      <p class="announcement--footer--item">
        <img class="inline-icon"
          src="<?=BASEURL?>img/ic_person_4d4d4d_18px.svg"
          alt="Posted By" />
        <?=$announcement->author_username?>
      </p>
      <p class="announcement--footer--item">
        <img class="inline-icon"
          src="<?=BASEURL?>img/ic_time_4d4d4d_18px.svg"
          alt="Posted On" />
        <time><?=$announcement->created_at?></time>
      </p>
    </footer>
  </section>
<?php } ?>

<!-- Navbar -->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Jean Champémont</a>
    </div>
    <div class="collapse navbar-collapse" id="main-navbar">
      <ul class="nav navbar-nav">
        <?php
          // navigation bar consists of homepage and its visible children
          if($homepage->id == $page->rootParent->id || $homepage->url == $page->menuActiveOverrideUrl) {
            echo "<li class='active'>";
          } else {
            echo "<li>";
          }
          echo "<a href='//$config->httpHost$homepage->url'>$homepage->title</a></li>";
          foreach($homepage->children as $item) {
            if($item->numChildren(true)) {
              echo "<li class='dropdown'>";
                echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>$item->title<span class='caret'></span></a>";
                echo "<ul class='dropdown-menu'>";
                  foreach($item->children as $sub_item) {
                    echo "<li><a href='//$config->httpHost$sub_item->url'>$sub_item->title</a></li>";
                  }
                echo "</ul>";
              echo "</li>";
            } else {
              if($item->id == $page->rootParent->id || $item->url == $page->menuActiveOverrideUrl) {
                echo "<li class='active'>";
              } else {
                echo "<li>";
              }
              echo "<a href='//$config->httpHost$item->url'>$item->title</a></li>";
            }
          }
        ?>
      </ul>
    </div>
  </div>
</nav>

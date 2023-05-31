<aside class="col-lg-3">
<!-- Champ de recherche: https://getbootstrap.com/docs/4.1/components/input-group/ -->
<div class="avec-bonus input-group mb-3">
  <input type="text" class="form-control" placeholder="Rechercher un article..." aria-label="Rechercher un article..."
    aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button">Allez</button>
  </div>
</div>

<!-- Catégories: https://getbootstrap.com/docs/4.1/components/card/#list-groups-->
<div class="card">
  <h3 class="card-header">Catégories</h3>
  <ul class="list-group list-group-flush">
      <?php $categories=get_categories() ;
      foreach($categories as $category): ?>
      
      
      
    <li class="list-group-item"><a href="<?= get_category_link($category->cat_ID) ?>"><?= $category->name ?></a></li>
    <?php endforeach; ?>
    <!-- <li class="list-group-item"><a href="category.html">TeamFront</a></li>
    <li class="list-group-item"><a href="category.html">Collaboration</a></li>
    <li class="list-group-item"><a href="category.html">Ma Vie De Dev</a></li> -->
  </ul>
</div>

<!-- Auteurs: https://getbootstrap.com/docs/4.1/components/card/#list-groups -->
<div class="card">
  <h3 class="card-header">Auteurs</h3>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Maxime</li>
    <li class="list-group-item">Anthony</li>
    <li class="list-group-item">Alexandre</li>
    <li class="list-group-item">Dario</li>
    <li class="list-group-item">Julie</li>
    <li class="list-group-item">Lucie</li>
    <li class="list-group-item">Xavier</li>
  </ul>
</div>

</aside>
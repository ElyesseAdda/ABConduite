/*
    Template Name: page-contact
    */
<?php get_header(); ?>
 
 <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
        <main class="col-lg-12">

<!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
<article class="card">
  <div class="card-body">
    <h2 class="card-title">Nous contacter</h2>
    <p class="card-text">

      <h3>La magie du web</h3>

      <p>Tenir un site ou un blog d’actualité est une aventure littéralement passionnante et qui nous donne à
        tous l’occasion d’échanger et de discuter autour de passions communes. Sans vous, notre quotidien ne
        serait sans doute pas le même. Effectuer une veille technologique plusieurs heures par jour est un
        investissement important et ce sont vos nombreux retours qui nous permettent, chaque jour, de nous
        améliorer et qui nous donnent envie de continuer à faire ce que nous faisons depuis plusieurs années
        maintenant.</p>

      <h3>Participez !</h3>

      <p>Un site, un blog, ce n’est pas une aventure en solitaire. Contrairement à ce que l’on peut penser, ce
        qui fait la richesse de ces derniers, ce sont tout autant les articles rédigés par les rédacteurs que
        les commentaires et suggestions postées par ceux qui viennent les lire chaque jour. Et si vous avez
        envie de participer, si vous souhaitez nous soumettre des produits ou des services, là encore il ne
        faut pas hésiter à nous contacter. Toutefois, sachez que si nous lisons tous les mails qui nous sont
        adressés, nous ne pouvons malheureusement pas y répondre à chaque fois. Ce sont effectivement plusieurs
        centaines de communiqués de presse que nous recevons chaque semaine. Et on préfère finalement vous
        écrire des articles plutôt que d’y répondre à chaque fois.</p>

      <h3>Comment nous contacter</h3>

      <div class="sans-bonus">

        <p>On en vient donc à ce qui vous intéresse, à savoir les manières dont vous pouvez nous contacter. En
          réalité, plusieurs choix s’offrent à vous :</p>

        <p>
          Par mail, à l’adresse suivante : redaction(at)oclock(point)io.<br>
          Sur Twitter, à l’adresse suivante : <a href="https://twitter.com/oclock_io">https://twitter.com/oclock_io</a>.<br>
          Sur Facebook, à l’adresse suivante : <a href="https://www.facebook.com/Oclock.io/">https://www.facebook.com/Oclock.io/</a>.
        </p>

        <p>Voilà, maintenant vous savez tout, à très vite !</p>

      </div>

      <div class="avec-bonus">
        <p>On en vient donc à ce qui vous intéresse, à savoir comment nous contacter. La réponse est limpide, il faut remplir le petit formulaire de contact ci-dessous :</p>
        <form name="sentMessage" action="" id="contactForm" novalidate>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Votre nom</label>
              <input type="text" class="form-control" placeholder="Nom" id="name" required
                data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Votre adresse email</label>
              <input type="email" class="form-control" placeholder="Adresse email" id="email" required
                data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Votre téléphone</label>
              <input type="tel" class="form-control" placeholder="Téléphone" id="phone" required
                data-validation-required-message="Please enter your phone number.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Votre message</label>
              <textarea rows="5" class="form-control" placeholder="Message" id="message" required
                data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-dark" id="sendMessageButton">Send</button>
          </div>
        </form>
      </div>

    </p>
  </div>
</article>

</main>

<?php get_footer(); ?>
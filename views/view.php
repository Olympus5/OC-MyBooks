<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>MyBooks - Home</title>
    <link rel="stylesheet" href="css/mybooks.css" />
  </head>
  <body>
    <header>
      <h1>MyBooks</h1>
    </header>

    <main>
      <?php
        foreach($books as $book) {
        ?>
        <article>
          <h2><?php echo $book->getTitle() ?></h2>
          <p><?php echo $book->getSummary() ?></p>
        </article>
        <?php
        }
      ?>
    </main>

    <footer id="footer">
      MyBooks est construit avec PHP, Silex, Twig et Bootstrap.
    </footer>
  </boyd>
</html>

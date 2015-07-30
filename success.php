<!DOCTYPE html>
<html>
  <? include "_includes/head.php" ?>
  <body class="view-response view-response-success">
    <? include "_includes/header.php" ?>
    <main>
      <div class="wrapper">
        <h1>Wahoo!</h1>
        <section class="files files-valid">
          <h1>The following files are <strong>valid</strong></h1>
          <article class="file">
            <h1>appropriation.csv</h1>
          </article>
          <article class="file">
            <h1>award_financial.csv</h1>
          </article>
          <article class="file">
            <h1>object_class_program_activity.csv</h1>
          </article>
          <article class="file file-with-errors">
            <h1>award.csv</h1>
          </article>
        </section>
        <p>Would you like to submit them to Treasury?</p>
        <form>
          <button>Submit</button>
        </form>
      </div>
    </main>
  </body>
</html>
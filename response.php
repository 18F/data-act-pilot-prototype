<!DOCTYPE html>
<html>
  <? include "_includes/head.php" ?>
  <body class="view-response">
    <? include "_includes/header.php" ?>
    <main>
      <div class="wrapper">
        <h1>Neato mosquito! Here&rsquo;s what we&rsquo;ve got</h1>
        <section class="files files-valid">
          <h1>[This/these] file[s] [is/are] <strong>valid</strong></h1>
          <article class="file">
            <h1>appropriation.csv</h1>
          </article>
          <article class="file">
            <h1>award_financial.csv</h1>
          </article>
        </section>
        <section class="files files-in-incorrect-format">
          <header>
            <h1>[This/these] file[s] [is/are] <strong>not in the correct format.</strong></h1>
            <p>Sometimes this happens when the uploaded file isn&rsquo;t a .csv or the the .csv column names don&rsquo;t match the template.</p>            
          </header>
          <article class="file">
            <h1>object_class_program_activity.csv</h1>
          </article>
        </section>
        <section class="files files-with-invalid-fields">
          <h1>[This/these] file[s] [is/are] <strong>contain [an] invalid [field/fields].</strong></h1>
          <article class="file file-with-errors">
            <h1>award.csv</h1>
            <article class="error">
              <h1>[Award ID]</h1>
              <p><span class="attribute">[Attribute]</span> is missing <span class="value">[value]</span>.</p>
            </article>
            <article class="error">
              <h1>[Award ID]</h1>
              <p><span class="attribute">[Attribute]</span> is missing <span class="value">[value]</span>.</p>
            </article>
            <article class="error">
              <h1>[Award ID]</h1>
              <p><span class="attribute">[Attribute]</span> is missing <span class="value">[value]</span>.</p>
            </article>
          </article>
        </section>
      </div>
    </main>
  </body>
</html>
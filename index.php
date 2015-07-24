<!DOCTYPE html>
<html>
  <? include "_includes/head.php" ?>
  <body class="view-home">
    <? include "_includes/header.php" ?>
    <main>
      <div class="wrapper">
        <h1>Data ACT Validator</h1>
        <p>Use the form below to upload and validate your <a href="#">DATA Act files</a></p>
        <form action="response.php">
          <div class="field field-file">
            <label>
              <span class="label-text">appropriation.csv</span>
              <input type="file" name="appropriation.csv">
            </label>
          </div>
          <div class="field field-file">
            <label>
              <span class="label-text">object_class_program_activity.csv</span>
              <input type="file" name="object_class_program_activity.csv">
            </label>
          </div>
          <div class="field field-file">
            <label>
              <span class="label-text">award.csv</span>
              <input type="file" name="award.csv">
            </label>
          </div>
          <div class="field field-file">
            <label>
              <span class="label-text">award_financial.csv</span>
              <input type="file" name="award_financial.csv">
            </label>
          </div>
          <footer>
            <button type="submit">Validate me</button>
          </footer>
        </form>
      </div>
    </main>
  </body>
</html>
<!DOCTYPE html>
<html>
  <? include "_includes/head" ?>
  <body>
    <? include "_includes/header" ?>
    <main>
      <div class="wrapper">
        <h1>Data ACT Validator</h1>
        <p>Use the form below to upload and validate your <a href="#">DATA Act files</a>. Once all four files are validated, you can submit them to Treasury.</p>
        <form>
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
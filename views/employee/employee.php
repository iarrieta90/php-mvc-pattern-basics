<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($employee) ? $employee['first_name'] . "'s profile" : "New employee" ?></title>
  <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
  <main>
    <form action='index.php' class="form" method="get">
      <h1 class="form__title"><?= isset($employee) ? $employee['first_name'] . "'s profile" : "New employee" ?></h1>
      <input type="hidden" name="controller" value="employee">
      <input type="hidden" name="action" value="<?= isset($employee) ? 'updateEmployee' : 'createEmployee' ?>">
      <?= isset($employee) ? "<input type='hidden' name='emp_no' value='$employee[emp_no]'>" : "" ?>


      <section class="form-section">
        <label class="form-section__label" for="first_name">First Name</label>
        <input class="form-section__input" type="text" name="first_name" id="first_name" value="<?= isset($employee) ? $employee['first_name'] : '' ?>" required>
        <label class="form-section__label" for="last_name">Last Name</label>
        <input class="form-section__input" type="text" name="last_name" id="last_name" value="<?= isset($employee) ? $employee['last_name'] : '' ?>" required>
      </section>

      <section class="form-section">
        <label class="form-section__label" for="email">e-mail</label>
        <input class="form-section__input" type="email" name="email" id="email" value="<?= isset($employee) ? $employee['email'] : '' ?>" required>
        <label class="form-section__select" for="gender">Gender</label>
        <select name="gender" id="gender" class="form-section__input" required>
          <option value="F" <?= isset($employee) ? ($employee['gender'] == "F" ? "selected" : "") : '' ?>>Female</option>
          <option value="M" <?= isset($employee) ? ($employee['gender'] == "M" ? "selected" : "") : '' ?>>Male</option>
          <option value="N" <?= isset($employee) ? ($employee['gender'] == "N" ? "selected" : "") : '' ?>>No-binary</option>
        </select>
      </section>

      <section class="form-section">
        <label class="form-section__label" for="street">Street Address</label>
        <input class="form-section__input" type="text" name="street" value="<?= isset($employee) ? $employee['street'] : '' ?>" required>
        <label class="form-section__label" for="state">State</label>
        <input class="form-section__input" type="text" name="state" id="state" value="<?= isset($employee) ? $employee['state'] : '' ?>" required>
      </section>

      <section class="form-section">
        <label class="form-section__label" for="city">City</label>
        <input class="form-section__input" type="text" name="city" id="city" value="<?= isset($employee) ? $employee['city'] : '' ?>" required>
        <label class="form-section__label" for="birth_date">Birth date</label>
        <input class="form-section__input" type="date" name="birth_date" id="birth_date" value="<?= isset($employee) ? $employee['birth_date'] : '' ?>" required>
      </section>

      <section class="form-section">
        <label class="form-section__label" for="postal_code">Postal Code </label>
        <input class="form-section__input" type="number" name="postal_code" id="postal_code" pattern="[0-9]{6}" value="<?= isset($employee) ? $employee['postal_code'] : '' ?>" required>
        <label class="form-section__label" for="phone_no">Phone Number</label>
        <input class="form-section__input" type="number" name="phone_no" id="phone_no" value="<?= isset($employee) ? $employee['phone_no'] : '' ?>" required>
      </section>

      <input type="submit" class="btn submit" value="<?= isset($employee) ? 'Update' : 'Create' ?>">
      <a href="index.php?controller=employee&action=getAllEmployees" class="btn">Back</a>
    </form>
  </main>
</body>

</html>
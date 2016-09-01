<?php
    $type = isset($type) ? $type : 'text';
    $class = $type == 'text' ? '' : $type . ' ';
    $value = $this->getValue();
?>
<p class="formtext <?php echo $class ? 'form' . $class : '' ?>formlabel-<?php echo $this->getName() ?>" id="<?php echo $this->getHTMLId() ?>">
    <label class="text <?php echo $class, ' ', $this->getWarningClass() ?>" for="<?php echo $this->getFieldId() ?>" ><?php echo $this->getLabel() ?></label>
    <input type="<?php echo $type ?>" class="text <?php echo $class, ' ', $this->getElement(5), ' ', $this->getWarningClass() ?>" name="<?php echo $this->getFieldName() ?>" id="<?php echo $this->getFieldId() ?>" value="<?php echo htmlspecialchars($value) ?>"<?php echo $this->getAttributeElements('placeholder'), $this->getAttributeElements('autocomplete'), $this->getAttributeElements('pattern'), $this->getAttributeElements('required', true), $this->getAttributeElements('disabled', true), $this->getAttributeElements('readonly', true) ?> />
</p>

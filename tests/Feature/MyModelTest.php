<?php

use RustamAliHussaini\RustamPackage\Models\MyModel;

it('can create a model' , function(){
    $myModel = MyModel::factory()->create();

    $this->assertModelExists($myModel);
});

<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateFortunes extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('fortunes');
        $table->addColumn('name', 'string', ['limit' => 40])
              ->addColumn('description', 'text')
              ->addColumn('created', 'datetime')
              ->addColumn('updated', 'datetime')
              ->create();
    }
}

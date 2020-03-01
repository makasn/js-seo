<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateComments extends AbstractMigration
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
        $table = $this->table('comments');
        $table->addColumn('name', 'string', ['limit' => 40])
              ->addColumn('comment', 'text')
              ->addColumn('created', 'datetime')
              ->addColumn('updated', 'datetime')
              ->create();
    }
}

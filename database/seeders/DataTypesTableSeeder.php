<?php

namespace Joy\VoyagerBreadNote\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'notes');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'notes',
                'display_name_singular' => __('joy-voyager-bread-note::seeders.data_types.note.singular'),
                'display_name_plural'   => __('joy-voyager-bread-note::seeders.data_types.note.plural'),
                'icon'                  => 'voyager-bread voyager-bread-note voyager-book',
                'model_name'            => 'Joy\\VoyagerBreadNote\\Models\\Note',
                // 'policy_name'           => 'Joy\\VoyagerBreadNote\\Policies\\NotePolicy',
                // 'controller'            => 'Joy\\VoyagerBreadNote\\Http\\Controllers\\VoyagerBreadNoteController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}

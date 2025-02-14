use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

$data['type'] = 'hugging_face_auth_key';
$data['description'] = 'Auth Key';
DB::table('settings')->insert($data);

$columnsToAdd = [
    'profile_status' => 'text',
];

// Filter out the columns that already exist in the users table
$columnsToAdd = array_filter($columnsToAdd, function ($type, $column) {
    return !Schema::hasColumn('users', $column);
}, ARRAY_FILTER_USE_BOTH);

// Check if there are columns to add before modifying the table
if (!empty($columnsToAdd)) {
    Schema::table('users', function (Blueprint $table) use ($columnsToAdd) {
        foreach ($columnsToAdd as $column => $type) {
            if ($type === 'string') {
                $table->string($column)->nullable();
            } elseif ($type === 'text') {
                $table->text($column)->nullable();
            }
            // Add more types if needed
        }
    });
}




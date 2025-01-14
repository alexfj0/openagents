<?php

namespace App\Models;

use App\Traits\StepActions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StepExecuted extends Model
{
    use HasFactory, StepActions;

    protected $guarded = [];

    public function run()
    {
        $input = (array) json_decode($this->input);

        // Based on the category, run the appropriate StepAction. [validation, embedding, similarity_search, inference]
        $category = $this->step->category;

        // If category is inference, set the current conversation so inference StepAction can access it
        // if ($category === 'inference') {
        //     $this->setConversation($this->task_executed->conversation);
        // }

        $output = $this->$category($input, $this->task_executed->conversation);
        // Update the StepExecuted with completed status and output
        $this->update([
            'status' => 'completed',
            'output' => $output
        ]);
        return $output;
    }

    public function step()
    {
        return $this->belongsTo(Step::class);
    }

    public function task_executed()
    {
        return $this->belongsTo(TaskExecuted::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

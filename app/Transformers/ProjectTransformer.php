<?php
/**
 * Created by PhpStorm.
 * User: ricardo
 * Date: 21/05/16
 * Time: 14:19
 */

namespace CodeProject\Transformers;

use CodeProject\Entities\Project;

use League\Fractal\TransformerAbstract;

class ProjectTransformer extends TransformerAbstract {

    public function tranform(Project $project){

        return [
            'project_id'=> $project->id,
            'project'=> $project->name,
            'decription'=> $project->description,
            'progress'=> $project->progress,
            'status'=> $project->status,
            'due_date'=> $project->due_date
        ];

    }

}
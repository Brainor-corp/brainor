<?php

namespace App;

use Bradmin\Cms\Models\BRPost;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Scout\Searchable;

class Post extends BRPost
{
    use Searchable;

    protected $table = 'b_r_posts';

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();
        return $array;
    }

    public static function boot()
    {
        parent::boot();
    }

    public function morphToMany($related, $name, $table = null, $foreignPivotKey = null,
                                $relatedPivotKey = null, $parentKey = null,
                                $relatedKey = null, $inverse = false)
    {
        $caller = $this->guessBelongsToManyRelation();
        $instance = $this->newRelatedInstance($related);


        $foreignPivotKey = $foreignPivotKey ?: $name.'_id';

        $relatedPivotKey = $relatedPivotKey ?: $instance->getForeignKey();
        $table = $table ?: Str::plural($name);

        return $this->newMorphToMany(
            $instance->newQuery(), new BRPost, $name, $table,
            $foreignPivotKey, $relatedPivotKey, $parentKey ?: $this->getKeyName(),
            $relatedKey ?: $instance->getKeyName(), $caller, $inverse
        );
    }
}

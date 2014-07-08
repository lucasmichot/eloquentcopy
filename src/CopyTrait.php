<?php namespace Lucasmichot\Eloquentcopy;

trait CopyTrait
{
    /**
     * Create a non-existing copy of the instance of the model.
     *
     * @return \Illuminate\Database\Eloquent\Model|static
     */
    public function copy()
    {
        $excluded = [$this->getKeyName()];

        if ($this->usesTimestamps())
        {
            $excluded = array_merge($excluded, [
                $this->getCreatedAtColumn(),
                $this->getUpdatedAtColumn(),
            ]);
        }

        return static::newInstance(array_except($this->getAttributes(), $excluded));
    }
}
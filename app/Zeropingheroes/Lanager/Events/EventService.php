<?php namespace Zeropingheroes\Lanager\Events;

use Zeropingheroes\Lanager\FlatResourceService;

class EventService extends FlatResourceService {

	protected $resource = 'event';

	public function __construct( $listener )
	{
		parent::__construct($listener, new Event);
	}

	public function all()
	{
		return $this->model->with('type')->orderby('start', 'asc')->get();
	}

	public function single($id)
	{
		return $this->model->with('type')->findOrFail($id);
	}

}
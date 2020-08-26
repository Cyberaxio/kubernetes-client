<?php

use Cyberaxio\Kubernetes\Models\Job;

class JobTest extends TestCase
{
	public function test_get_schema()
	{
		$job = new Job;

		$schema = $job->getSchema();
		$fixture = $this->getFixture('jobs/empty.json');

		$this->assertEquals($schema, $fixture);
	}

	public function test_get_metadata()
	{
		$job = new Job([
			'metadata' => [
				'name' => 'test',
			],
		]);

		$metadata = $job->getMetadata('name');

		$this->assertEquals($metadata, 'test');
	}
}

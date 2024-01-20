<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\SecurityCommandCenter;

class GoogleCloudSecuritycenterV2Finding extends \Google\Collection
{
  protected $collection_key = 'processes';
  protected $accessType = GoogleCloudSecuritycenterV2Access::class;
  protected $accessDataType = '';
  protected $attackExposureType = GoogleCloudSecuritycenterV2AttackExposure::class;
  protected $attackExposureDataType = '';
  /**
   * @var string
   */
  public $canonicalName;
  /**
   * @var string
   */
  public $category;
  protected $cloudDlpDataProfileType = GoogleCloudSecuritycenterV2CloudDlpDataProfile::class;
  protected $cloudDlpDataProfileDataType = '';
  protected $cloudDlpInspectionType = GoogleCloudSecuritycenterV2CloudDlpInspection::class;
  protected $cloudDlpInspectionDataType = '';
  protected $compliancesType = GoogleCloudSecuritycenterV2Compliance::class;
  protected $compliancesDataType = 'array';
  protected $connectionsType = GoogleCloudSecuritycenterV2Connection::class;
  protected $connectionsDataType = 'array';
  protected $contactsType = GoogleCloudSecuritycenterV2ContactDetails::class;
  protected $contactsDataType = 'map';
  protected $containersType = GoogleCloudSecuritycenterV2Container::class;
  protected $containersDataType = 'array';
  /**
   * @var string
   */
  public $createTime;
  protected $databaseType = GoogleCloudSecuritycenterV2Database::class;
  protected $databaseDataType = '';
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $eventTime;
  protected $exfiltrationType = GoogleCloudSecuritycenterV2Exfiltration::class;
  protected $exfiltrationDataType = '';
  protected $externalSystemsType = GoogleCloudSecuritycenterV2ExternalSystem::class;
  protected $externalSystemsDataType = 'map';
  /**
   * @var string
   */
  public $externalUri;
  protected $filesType = GoogleCloudSecuritycenterV2File::class;
  protected $filesDataType = 'array';
  /**
   * @var string
   */
  public $findingClass;
  protected $iamBindingsType = GoogleCloudSecuritycenterV2IamBinding::class;
  protected $iamBindingsDataType = 'array';
  protected $indicatorType = GoogleCloudSecuritycenterV2Indicator::class;
  protected $indicatorDataType = '';
  protected $kernelRootkitType = GoogleCloudSecuritycenterV2KernelRootkit::class;
  protected $kernelRootkitDataType = '';
  protected $kubernetesType = GoogleCloudSecuritycenterV2Kubernetes::class;
  protected $kubernetesDataType = '';
  protected $loadBalancersType = GoogleCloudSecuritycenterV2LoadBalancer::class;
  protected $loadBalancersDataType = 'array';
  protected $logEntriesType = GoogleCloudSecuritycenterV2LogEntry::class;
  protected $logEntriesDataType = 'array';
  protected $mitreAttackType = GoogleCloudSecuritycenterV2MitreAttack::class;
  protected $mitreAttackDataType = '';
  /**
   * @var string
   */
  public $moduleName;
  /**
   * @var string
   */
  public $mute;
  /**
   * @var string
   */
  public $muteInitiator;
  /**
   * @var string
   */
  public $muteUpdateTime;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $nextSteps;
  protected $orgPoliciesType = GoogleCloudSecuritycenterV2OrgPolicy::class;
  protected $orgPoliciesDataType = 'array';
  /**
   * @var string
   */
  public $parent;
  /**
   * @var string
   */
  public $parentDisplayName;
  protected $processesType = GoogleCloudSecuritycenterV2Process::class;
  protected $processesDataType = 'array';
  /**
   * @var string
   */
  public $resourceName;
  protected $securityMarksType = GoogleCloudSecuritycenterV2SecurityMarks::class;
  protected $securityMarksDataType = '';
  protected $securityPostureType = GoogleCloudSecuritycenterV2SecurityPosture::class;
  protected $securityPostureDataType = '';
  /**
   * @var string
   */
  public $severity;
  /**
   * @var array[]
   */
  public $sourceProperties;
  /**
   * @var string
   */
  public $state;
  protected $vulnerabilityType = GoogleCloudSecuritycenterV2Vulnerability::class;
  protected $vulnerabilityDataType = '';

  /**
   * @param GoogleCloudSecuritycenterV2Access
   */
  public function setAccess(GoogleCloudSecuritycenterV2Access $access)
  {
    $this->access = $access;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Access
   */
  public function getAccess()
  {
    return $this->access;
  }
  /**
   * @param GoogleCloudSecuritycenterV2AttackExposure
   */
  public function setAttackExposure(GoogleCloudSecuritycenterV2AttackExposure $attackExposure)
  {
    $this->attackExposure = $attackExposure;
  }
  /**
   * @return GoogleCloudSecuritycenterV2AttackExposure
   */
  public function getAttackExposure()
  {
    return $this->attackExposure;
  }
  /**
   * @param string
   */
  public function setCanonicalName($canonicalName)
  {
    $this->canonicalName = $canonicalName;
  }
  /**
   * @return string
   */
  public function getCanonicalName()
  {
    return $this->canonicalName;
  }
  /**
   * @param string
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /**
   * @return string
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
   * @param GoogleCloudSecuritycenterV2CloudDlpDataProfile
   */
  public function setCloudDlpDataProfile(GoogleCloudSecuritycenterV2CloudDlpDataProfile $cloudDlpDataProfile)
  {
    $this->cloudDlpDataProfile = $cloudDlpDataProfile;
  }
  /**
   * @return GoogleCloudSecuritycenterV2CloudDlpDataProfile
   */
  public function getCloudDlpDataProfile()
  {
    return $this->cloudDlpDataProfile;
  }
  /**
   * @param GoogleCloudSecuritycenterV2CloudDlpInspection
   */
  public function setCloudDlpInspection(GoogleCloudSecuritycenterV2CloudDlpInspection $cloudDlpInspection)
  {
    $this->cloudDlpInspection = $cloudDlpInspection;
  }
  /**
   * @return GoogleCloudSecuritycenterV2CloudDlpInspection
   */
  public function getCloudDlpInspection()
  {
    return $this->cloudDlpInspection;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Compliance[]
   */
  public function setCompliances($compliances)
  {
    $this->compliances = $compliances;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Compliance[]
   */
  public function getCompliances()
  {
    return $this->compliances;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Connection[]
   */
  public function setConnections($connections)
  {
    $this->connections = $connections;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Connection[]
   */
  public function getConnections()
  {
    return $this->connections;
  }
  /**
   * @param GoogleCloudSecuritycenterV2ContactDetails[]
   */
  public function setContacts($contacts)
  {
    $this->contacts = $contacts;
  }
  /**
   * @return GoogleCloudSecuritycenterV2ContactDetails[]
   */
  public function getContacts()
  {
    return $this->contacts;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Container[]
   */
  public function setContainers($containers)
  {
    $this->containers = $containers;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Container[]
   */
  public function getContainers()
  {
    return $this->containers;
  }
  /**
   * @param string
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Database
   */
  public function setDatabase(GoogleCloudSecuritycenterV2Database $database)
  {
    $this->database = $database;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Database
   */
  public function getDatabase()
  {
    return $this->database;
  }
  /**
   * @param string
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param string
   */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /**
   * @return string
   */
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Exfiltration
   */
  public function setExfiltration(GoogleCloudSecuritycenterV2Exfiltration $exfiltration)
  {
    $this->exfiltration = $exfiltration;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Exfiltration
   */
  public function getExfiltration()
  {
    return $this->exfiltration;
  }
  /**
   * @param GoogleCloudSecuritycenterV2ExternalSystem[]
   */
  public function setExternalSystems($externalSystems)
  {
    $this->externalSystems = $externalSystems;
  }
  /**
   * @return GoogleCloudSecuritycenterV2ExternalSystem[]
   */
  public function getExternalSystems()
  {
    return $this->externalSystems;
  }
  /**
   * @param string
   */
  public function setExternalUri($externalUri)
  {
    $this->externalUri = $externalUri;
  }
  /**
   * @return string
   */
  public function getExternalUri()
  {
    return $this->externalUri;
  }
  /**
   * @param GoogleCloudSecuritycenterV2File[]
   */
  public function setFiles($files)
  {
    $this->files = $files;
  }
  /**
   * @return GoogleCloudSecuritycenterV2File[]
   */
  public function getFiles()
  {
    return $this->files;
  }
  /**
   * @param string
   */
  public function setFindingClass($findingClass)
  {
    $this->findingClass = $findingClass;
  }
  /**
   * @return string
   */
  public function getFindingClass()
  {
    return $this->findingClass;
  }
  /**
   * @param GoogleCloudSecuritycenterV2IamBinding[]
   */
  public function setIamBindings($iamBindings)
  {
    $this->iamBindings = $iamBindings;
  }
  /**
   * @return GoogleCloudSecuritycenterV2IamBinding[]
   */
  public function getIamBindings()
  {
    return $this->iamBindings;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Indicator
   */
  public function setIndicator(GoogleCloudSecuritycenterV2Indicator $indicator)
  {
    $this->indicator = $indicator;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Indicator
   */
  public function getIndicator()
  {
    return $this->indicator;
  }
  /**
   * @param GoogleCloudSecuritycenterV2KernelRootkit
   */
  public function setKernelRootkit(GoogleCloudSecuritycenterV2KernelRootkit $kernelRootkit)
  {
    $this->kernelRootkit = $kernelRootkit;
  }
  /**
   * @return GoogleCloudSecuritycenterV2KernelRootkit
   */
  public function getKernelRootkit()
  {
    return $this->kernelRootkit;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Kubernetes
   */
  public function setKubernetes(GoogleCloudSecuritycenterV2Kubernetes $kubernetes)
  {
    $this->kubernetes = $kubernetes;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Kubernetes
   */
  public function getKubernetes()
  {
    return $this->kubernetes;
  }
  /**
   * @param GoogleCloudSecuritycenterV2LoadBalancer[]
   */
  public function setLoadBalancers($loadBalancers)
  {
    $this->loadBalancers = $loadBalancers;
  }
  /**
   * @return GoogleCloudSecuritycenterV2LoadBalancer[]
   */
  public function getLoadBalancers()
  {
    return $this->loadBalancers;
  }
  /**
   * @param GoogleCloudSecuritycenterV2LogEntry[]
   */
  public function setLogEntries($logEntries)
  {
    $this->logEntries = $logEntries;
  }
  /**
   * @return GoogleCloudSecuritycenterV2LogEntry[]
   */
  public function getLogEntries()
  {
    return $this->logEntries;
  }
  /**
   * @param GoogleCloudSecuritycenterV2MitreAttack
   */
  public function setMitreAttack(GoogleCloudSecuritycenterV2MitreAttack $mitreAttack)
  {
    $this->mitreAttack = $mitreAttack;
  }
  /**
   * @return GoogleCloudSecuritycenterV2MitreAttack
   */
  public function getMitreAttack()
  {
    return $this->mitreAttack;
  }
  /**
   * @param string
   */
  public function setModuleName($moduleName)
  {
    $this->moduleName = $moduleName;
  }
  /**
   * @return string
   */
  public function getModuleName()
  {
    return $this->moduleName;
  }
  /**
   * @param string
   */
  public function setMute($mute)
  {
    $this->mute = $mute;
  }
  /**
   * @return string
   */
  public function getMute()
  {
    return $this->mute;
  }
  /**
   * @param string
   */
  public function setMuteInitiator($muteInitiator)
  {
    $this->muteInitiator = $muteInitiator;
  }
  /**
   * @return string
   */
  public function getMuteInitiator()
  {
    return $this->muteInitiator;
  }
  /**
   * @param string
   */
  public function setMuteUpdateTime($muteUpdateTime)
  {
    $this->muteUpdateTime = $muteUpdateTime;
  }
  /**
   * @return string
   */
  public function getMuteUpdateTime()
  {
    return $this->muteUpdateTime;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setNextSteps($nextSteps)
  {
    $this->nextSteps = $nextSteps;
  }
  /**
   * @return string
   */
  public function getNextSteps()
  {
    return $this->nextSteps;
  }
  /**
   * @param GoogleCloudSecuritycenterV2OrgPolicy[]
   */
  public function setOrgPolicies($orgPolicies)
  {
    $this->orgPolicies = $orgPolicies;
  }
  /**
   * @return GoogleCloudSecuritycenterV2OrgPolicy[]
   */
  public function getOrgPolicies()
  {
    return $this->orgPolicies;
  }
  /**
   * @param string
   */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /**
   * @return string
   */
  public function getParent()
  {
    return $this->parent;
  }
  /**
   * @param string
   */
  public function setParentDisplayName($parentDisplayName)
  {
    $this->parentDisplayName = $parentDisplayName;
  }
  /**
   * @return string
   */
  public function getParentDisplayName()
  {
    return $this->parentDisplayName;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Process[]
   */
  public function setProcesses($processes)
  {
    $this->processes = $processes;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Process[]
   */
  public function getProcesses()
  {
    return $this->processes;
  }
  /**
   * @param string
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * @param GoogleCloudSecuritycenterV2SecurityMarks
   */
  public function setSecurityMarks(GoogleCloudSecuritycenterV2SecurityMarks $securityMarks)
  {
    $this->securityMarks = $securityMarks;
  }
  /**
   * @return GoogleCloudSecuritycenterV2SecurityMarks
   */
  public function getSecurityMarks()
  {
    return $this->securityMarks;
  }
  /**
   * @param GoogleCloudSecuritycenterV2SecurityPosture
   */
  public function setSecurityPosture(GoogleCloudSecuritycenterV2SecurityPosture $securityPosture)
  {
    $this->securityPosture = $securityPosture;
  }
  /**
   * @return GoogleCloudSecuritycenterV2SecurityPosture
   */
  public function getSecurityPosture()
  {
    return $this->securityPosture;
  }
  /**
   * @param string
   */
  public function setSeverity($severity)
  {
    $this->severity = $severity;
  }
  /**
   * @return string
   */
  public function getSeverity()
  {
    return $this->severity;
  }
  /**
   * @param array[]
   */
  public function setSourceProperties($sourceProperties)
  {
    $this->sourceProperties = $sourceProperties;
  }
  /**
   * @return array[]
   */
  public function getSourceProperties()
  {
    return $this->sourceProperties;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * @param GoogleCloudSecuritycenterV2Vulnerability
   */
  public function setVulnerability(GoogleCloudSecuritycenterV2Vulnerability $vulnerability)
  {
    $this->vulnerability = $vulnerability;
  }
  /**
   * @return GoogleCloudSecuritycenterV2Vulnerability
   */
  public function getVulnerability()
  {
    return $this->vulnerability;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudSecuritycenterV2Finding::class, 'Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV2Finding');

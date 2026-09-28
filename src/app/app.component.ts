import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

type DashboardSection = 'Dashboard' | 'Patient list' | 'Reports' | 'Account';
type AnalyticsTab = 'Overview' | 'Biomarker details' | 'Lung function' | 'Analytics' | 'Risk simulator' | 'Patient history' | 'Notes & orders';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [CommonModule, FormsModule],
  templateUrl: './app.component.html',
})
export class AppComponent {
  title = 'Pulmify';
  dashboardSections: DashboardSection[] = ['Dashboard', 'Patient list', 'Reports', 'Account'];
  analyticsTabs: AnalyticsTab[] = [
    'Overview',
    'Biomarker details',
    'Lung function',
    'Analytics',
    'Risk simulator',
    'Patient history',
    'Notes & orders',
  ];
  selectedSection: DashboardSection = 'Dashboard';
  selectedTab: AnalyticsTab = 'Analytics';
  searchQuery = '';
  filter = 'All patients';
  sortBy = 'Popular';
  environmentalExposure = 20;
  selectedPatientId = 'PT-2048';
  demoName = '';
  demoEmail = '';
  demoOrganization = '';
  demoMessage = '';
  demoRequestPrepared = false;

  clinicalNotes = [
    { title: 'Pulmonary function test scheduled', detail: 'Anna Kim · Oct 02, 2026', status: 'Scheduled' },
    { title: 'Review elevated IL-6 result', detail: 'Marcus Chen · Care team follow-up', status: 'Needs review' },
    { title: 'Quarterly biomarker panel received', detail: 'Sofia Patel · Sep 27, 2026', status: 'Complete' },
  ];

  patients = [
    { name: 'Anna Kim', id: 'PT-2048', age: 42, status: 'Monitoring', risk: 'Low', marker: 'ALDH-3', updated: 'Today, 9:42 AM' },
    { name: 'Marcus Chen', id: 'PT-1983', age: 57, status: 'Review needed', risk: 'Elevated', marker: 'IL-6', updated: 'Today, 8:15 AM' },
    { name: 'Sofia Patel', id: 'PT-1931', age: 36, status: 'Stable', risk: 'Low', marker: 'TNF-α', updated: 'Yesterday' },
    { name: 'James Wilson', id: 'PT-1882', age: 64, status: 'Monitoring', risk: 'Moderate', marker: 'CRP', updated: 'Yesterday' },
  ];

  aldehydeBars = [10, 8, 6, 12, 9, 7, 5, 9, 13, 11, 8, 12, 15, 10, 7, 9];
  currentBars = [88, 83, 69, 91, 58, 55, 48, 64, 79, 74, 61, 69, 82, 77, 65, 73];
  previousBars = [55, 61, 52, 49, 43, 37, 33, 47, 62, 57, 49, 53, 68, 54, 44, 59];

  get selectedPatient() {
    return this.patients.find((patient) => patient.id === this.selectedPatientId) ?? this.patients[0];
  }

  get patientAgeGroup(): string {
    const lowerBound = Math.floor(this.selectedPatient.age / 10) * 10;
    return `${lowerBound}–${lowerBound + 9}`;
  }

  get baselineRiskScore(): number {
    switch (this.selectedPatient.risk) {
      case 'Elevated':
        return 36;
      case 'Moderate':
        return 24;
      default:
        return 12;
    }
  }

  get elevatedRiskCount(): number {
    return this.patients.filter((patient) => patient.risk === 'Elevated').length;
  }

  get stablePatientCount(): number {
    return this.patients.filter((patient) => patient.status === 'Stable').length;
  }

  get simulatedRiskScore(): number {
    return Math.min(95, this.baselineRiskScore + Math.round(this.environmentalExposure * 0.3));
  }

  get demoMailto(): string {
    const subject = encodeURIComponent(`Pulmify demo request — ${this.demoOrganization.trim()}`);
    const body = encodeURIComponent(
      `Name: ${this.demoName.trim()}\nEmail: ${this.demoEmail.trim()}\nOrganization: ${this.demoOrganization.trim()}\n\n${this.demoMessage.trim()}`,
    );
    return `mailto:hello@pulmify.com?subject=${subject}&body=${body}`;
  }

  prepareDemoRequest(): void {
    this.demoRequestPrepared = true;
  }

  get filteredPatients() {
    const query = this.searchQuery.trim().toLowerCase();
    let results = this.patients.filter((patient) => {
      const matchesQuery = !query || `${patient.name} ${patient.id} ${patient.marker}`.toLowerCase().includes(query);
      const matchesFilter = this.filter === 'All patients' || patient.status === this.filter;
      return matchesQuery && matchesFilter;
    });

    if (this.sortBy === 'Name') {
      results = [...results].sort((a, b) => a.name.localeCompare(b.name));
    } else if (this.sortBy === 'Risk') {
      const riskOrder = ['Elevated', 'Moderate', 'Low'];
      results = [...results].sort((a, b) => riskOrder.indexOf(a.risk) - riskOrder.indexOf(b.risk));
    }

    return results;
  }
}

import { TestBed } from '@angular/core/testing';
import { AppComponent } from './app.component';

describe('AppComponent', () => {
  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [AppComponent],
    }).compileComponents();
  });

  it('should create the app', () => {
    const fixture = TestBed.createComponent(AppComponent);
    expect(fixture.componentInstance).toBeTruthy();
  });

  it('should render the Pulmify clinical dashboard', () => {
    const fixture = TestBed.createComponent(AppComponent);
    fixture.detectChanges();
    const compiled = fixture.nativeElement as HTMLElement;

    expect(fixture.componentInstance.title).toBe('Pulmify');
    expect(compiled.querySelector('h1')?.textContent).toContain('Your Clinical');
    expect(compiled.textContent).toContain('Deep Dive Analytics');
    expect(compiled.textContent).toContain('Side-by-side comparison');
    expect(compiled.textContent).toContain('Illustrative demo data');
    expect(compiled.querySelector('#services')?.textContent).toContain('Biomarker trends');
    expect(compiled.querySelectorAll('#faq details').length).toBe(4);
    expect(compiled.querySelector('#contact a')?.getAttribute('href')).toContain('mailto:hello@pulmify.com');
    const navigation = compiled.querySelector('header nav');
    expect(navigation?.classList).toContain('flex-nowrap');
    expect(navigation?.querySelectorAll('a').length).toBe(8);
    expect(compiled.querySelectorAll('[aria-label="Aldehyde levels rise through the year"] span').length).toBe(16);
  });

  it('should filter and sort the patient list', () => {
    const fixture = TestBed.createComponent(AppComponent);
    const app = fixture.componentInstance;

    app.searchQuery = 'anna';
    expect(app.filteredPatients.map((patient) => patient.name)).toEqual(['Anna Kim']);

    app.searchQuery = '';
    app.sortBy = 'Risk';
    expect(app.filteredPatients.map((patient) => patient.risk)).toEqual(['Elevated', 'Moderate', 'Low', 'Low']);
    expect(app.elevatedRiskCount).toBe(1);
    expect(app.stablePatientCount).toBe(1);
  });

  it('should show the patient list when selected', () => {
    const fixture = TestBed.createComponent(AppComponent);
    fixture.componentInstance.selectedSection = 'Patient list';
    fixture.detectChanges();

    expect((fixture.nativeElement as HTMLElement).textContent).toContain('Anna Kim');
  });

  it('should update the risk estimate in the simulator', () => {
    const fixture = TestBed.createComponent(AppComponent);
    const app = fixture.componentInstance;

    app.selectedTab = 'Risk simulator';
    app.environmentalExposure = 100;
    fixture.detectChanges();

    expect(app.simulatedRiskScore).toBe(42);
    expect((fixture.nativeElement as HTMLElement).textContent).toContain('Environmental exposure simulator');
    expect((fixture.nativeElement as HTMLElement).textContent).toContain('42%');
  });

  it('should show clinical notes in the notes and orders view', () => {
    const fixture = TestBed.createComponent(AppComponent);
    fixture.componentInstance.selectedTab = 'Notes & orders';
    fixture.detectChanges();

    expect((fixture.nativeElement as HTMLElement).textContent).toContain('Pulmonary function test scheduled');
    expect((fixture.nativeElement as HTMLElement).textContent).toContain('Needs review');
  });

  it('should update the focused patient and their risk baseline', () => {
    const fixture = TestBed.createComponent(AppComponent);
    const app = fixture.componentInstance;

    app.selectedPatientId = 'PT-1983';

    expect(app.selectedPatient.name).toBe('Marcus Chen');
    expect(app.baselineRiskScore).toBe(36);
    expect(app.patientAgeGroup).toBe('50–59');
  });

  it('should prepare a pre-filled demo email without claiming it was sent', () => {
    const fixture = TestBed.createComponent(AppComponent);
    const app = fixture.componentInstance;

    app.demoName = 'Alex Rivera';
    app.demoEmail = 'alex@example.com';
    app.demoOrganization = 'North Clinic';
    app.demoMessage = 'We would like a product tour.';
    app.prepareDemoRequest();

    expect(app.demoMailto).toContain('mailto:hello@pulmify.com');
    expect(app.demoMailto).toContain(encodeURIComponent('North Clinic'));
    expect(app.demoMailto).toContain(encodeURIComponent('alex@example.com'));
    expect(app.demoRequestPrepared).toBeTrue();
  });
});
